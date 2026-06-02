// Magnetic Cursor Effect

const magneticButtons = document.querySelectorAll('.magnetic-btn');

magneticButtons.forEach((button) => {

    const magneticDistance = 180;
    const strength = 0.45;

    window.addEventListener('mousemove', (e) => {

        const rect = button.getBoundingClientRect();

        const centerX =
            rect.left + rect.width / 2;

        const centerY =
            rect.top + rect.height / 2;

        const deltaX =
            e.clientX - centerX;

        const deltaY =
            e.clientY - centerY;

        const distance = Math.sqrt(
            deltaX * deltaX +
            deltaY * deltaY
        );

        if (distance < magneticDistance) {

            const pull =
                Math.pow(
                    1 -
                    distance / magneticDistance,
                    0.5
                );

            const moveX =
                deltaX *
                pull *
                strength;

            const moveY =
                deltaY *
                pull *
                strength;

            button.style.transform =
                `translate(${moveX}px, ${moveY}px) scale(1.05)`;

            button.classList.add(
                'magnetic-active'
            );

        } else {

            button.style.transform =
                'translate(0px, 0px) scale(1)';

            button.classList.remove(
                'magnetic-active'
            );

        }

    });

});