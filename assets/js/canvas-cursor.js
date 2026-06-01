document.addEventListener('DOMContentLoaded', () => {

    // Disable on mobile/tablet
    if (window.innerWidth < 1024) return;

    const canvas = document.getElementById('canvas');

    if (!canvas) return;

    let ctx = canvas.getContext('2d');

    let pos = {
        x: window.innerWidth / 2,
        y: window.innerHeight / 2
    };

    let lines = [];

    let hue;
    let hueValue = 0;

    const config = {
        friction: 0.5,
        trails: 15,
        size: 40,
        dampening: 0.20,
        tension: 0.98
    };

    function Oscillator(options) {
        this.init(options || {});
    }

    Oscillator.prototype = {

        init(options) {

            this.phase = options.phase || 0;
            this.offset = options.offset || 0;
            this.frequency = options.frequency || 0.001;
            this.amplitude = options.amplitude || 1;

        },

        update() {

            this.phase += this.frequency;

            hueValue =
                this.offset +
                Math.sin(this.phase) * this.amplitude;

            return hueValue;

        }
    };

    function Node() {

        this.x = 0;
        this.y = 0;

        this.vx = 0;
        this.vy = 0;

    }

    function Line(options) {

        this.init(options || {});

    }

    Line.prototype = {

        init(options) {

            this.spring =
                options.spring +
                0.1 * Math.random() -
                0.02;

            this.friction =
                config.friction +
                0.01 * Math.random() -
                0.002;

            this.nodes = [];

            for (let i = 0; i < config.size; i++) {

                const node = new Node();

                node.x = pos.x;
                node.y = pos.y;

                this.nodes.push(node);

            }

        },

        update() {

            let spring = this.spring;

            let node = this.nodes[0];

            node.vx += (pos.x - node.x) * spring;
            node.vy += (pos.y - node.y) * spring;

            for (
                let i = 0;
                i < this.nodes.length;
                i++
            ) {

                node = this.nodes[i];

                if (i > 0) {

                    const prev = this.nodes[i - 1];

                    node.vx +=
                        (prev.x - node.x) *
                        spring;

                    node.vy +=
                        (prev.y - node.y) *
                        spring;

                    node.vx +=
                        prev.vx *
                        config.dampening;

                    node.vy +=
                        prev.vy *
                        config.dampening;

                }

                node.vx *= this.friction;
                node.vy *= this.friction;

                node.x += node.vx;
                node.y += node.vy;

                spring *= config.tension;

            }

        },

        draw() {

            let x = this.nodes[0].x;
            let y = this.nodes[0].y;

            ctx.beginPath();

            ctx.moveTo(x, y);

            for (
                let i = 1;
                i < this.nodes.length - 2;
                i++
            ) {

                const current =
                    this.nodes[i];

                const next =
                    this.nodes[i + 1];

                x =
                    (current.x + next.x) *
                    0.5;

                y =
                    (current.y + next.y) *
                    0.5;

                ctx.quadraticCurveTo(
                    current.x,
                    current.y,
                    x,
                    y
                );

            }

            const last =
                this.nodes[this.nodes.length - 2];

            const end =
                this.nodes[this.nodes.length - 1];

            ctx.quadraticCurveTo(
                last.x,
                last.y,
                end.x,
                end.y
            );

            ctx.stroke();
            ctx.closePath();

        }

    };

    function createLines() {

        lines = [];

        for (
            let i = 0;
            i < config.trails;
            i++
        ) {

            lines.push(
                new Line({
                    spring:
                        0.45 +
                        (i / config.trails) *
                        0.025
                })
            );

        }

    }

    function render() {

        if (!ctx.running) return;

        ctx.globalCompositeOperation =
            'source-over';

        ctx.clearRect(
            0,
            0,
            canvas.width,
            canvas.height
        );

        ctx.globalCompositeOperation =
            'lighter';

        ctx.strokeStyle = 'rgba(6, 182, 212, 0.45)';

        ctx.lineWidth = 1.5;

        for (
            let i = 0;
            i < lines.length;
            i++
        ) {

            lines[i].update();
            lines[i].draw();

        }

        requestAnimationFrame(render);

    }

    function resizeCanvas() {

        canvas.width =
            window.innerWidth;

        canvas.height =
            window.innerHeight;

    }

    function mouseMove(e) {

        pos.x = e.clientX;
        pos.y = e.clientY;

    }

    function touchMove(e) {

        if (e.touches.length) {

            pos.x =
                e.touches[0].pageX;

            pos.y =
                e.touches[0].pageY;

        }

    }

    hue = new Oscillator({

        phase:
            Math.random() *
            Math.PI *
            2,

        amplitude: 85,
        frequency: 0.0015,
        offset: 185

    });

    ctx.running = true;

    resizeCanvas();

    let initialized = false;

    document.addEventListener('mousemove', (e) => {

        pos.x = e.clientX;
        pos.y = e.clientY;

        if (!initialized) {

            initialized = true;

            createLines();

            render();

        }

    });
});