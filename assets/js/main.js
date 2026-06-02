document.addEventListener('DOMContentLoaded', () => {

    const toggleBtn = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    if (toggleBtn && mobileMenu) {

        toggleBtn.addEventListener('click', () => {

            mobileMenu.classList.toggle('hidden');

        });

    }

});

// Text Resolver Animation

(function () {

    const element =
        document.getElementById(
            'resolver-word'
        );

    if (!element) return;

    const words = [
        'WORK?',
        'BUILD?',
        'CREATE?',
        'CONNECT?'
    ];

    let current = 0;

    function scrambleText(
        finalText
    ) {

        const chars =
            'ABCDEFGHIJKLMNOPQRSTUVWXYZ#%&+';

        let iteration = 0;

        const interval =
            setInterval(() => {

                element.textContent =
                    finalText
                        .split('')
                        .map(
                            (
                                letter,
                                index
                            ) => {

                                if (
                                    index <
                                    iteration
                                ) {

                                    return finalText[
                                        index
                                    ];

                                }

                                return chars[
                                    Math.floor(
                                        Math.random() *
                                        chars.length
                                    )
                                ];

                            }
                        )
                        .join('');

                if (
                    iteration >=
                    finalText.length
                ) {

                    clearInterval(
                        interval
                    );

                }

                iteration += 1 / 5;

            }, 20);

    }

    scrambleText(
        words[current]
    );

    setInterval(() => {

        current++;

        if (
            current >=
            words.length
        ) {

            current = 0;

        }

        scrambleText(
            words[current]
        );

    }, 5000);

})();