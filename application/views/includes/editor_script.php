<script>
    const maxCharacters = 5000;
    const container = document.querySelector( '.demo-update' );
    const progressCircle = document.querySelector( '.demo-update__chart__circle' );
    const charactersBox = document.querySelector( '.demo-update__chart__characters' );
    const wordsBox = document.querySelector( '.demo-update__words' );
    const circleCircumference = Math.floor( 2 * Math.PI * progressCircle.getAttribute( 'r' ) );
    const sendButton = document.querySelector( '.demo-update__send' );
    
    ClassicEditor
        .create( document.querySelector( '#demo-update__editor' ), {
            // Editor configuration.
            wordCount: {
                onUpdate: stats => {
                    const charactersProgress = stats.characters / maxCharacters * circleCircumference;
                    const isLimitExceeded = stats.characters > maxCharacters;
                    const isCloseToLimit = !isLimitExceeded && stats.characters > maxCharacters * .8;
                    const circleDashArray = Math.min( charactersProgress, circleCircumference );

                    // Set the stroke of the circle to show how many characters were typed.
                    progressCircle.setAttribute( 'stroke-dasharray', `${ circleDashArray },${ circleCircumference }` );

                    // Display the number of characters in the progress chart. When the limit is exceeded,
                    // display how many characters should be removed.
                    if ( isLimitExceeded ) {
                        charactersBox.textContent = `-${ stats.characters - maxCharacters }`;
                    } else {
                        charactersBox.textContent = stats.characters;
                    }

                    wordsBox.textContent = `Mesajdaki kelime sayısı: ${ stats.words }`;

                    // If the content length is close to the character limit, add a CSS class to warn the user.
                    container.classList.toggle( 'demo-update__limit-close', isCloseToLimit );

                    // If the character limit is exceeded, add a CSS class that makes the content's background red.
                    container.classList.toggle( 'demo-update__limit-exceeded', isLimitExceeded );

                    // If the character limit is exceeded, disable the send button.
                    sendButton.toggleAttribute( 'disabled', isLimitExceeded );
                }
            }
        } )                
        .catch( error => {
            console.error( error );
        } );
</script>