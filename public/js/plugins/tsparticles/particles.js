tsParticles.load("tsparticles", {
    fullScreen: {
        enable: "false",
        "z-index": "0",
    },
    background: {
        color: {
            value: "#000000",
        },
        position: "50% 50%",
        repeat: "no-repeat",
        size: "cover",
    },

    particles: {
        color: {
            value: "random",
        },

        rotate: {
            random: {
                enable: true,
            },
            animation: {
                enable: true,
                speed: 1,
            },
            direction: "random",
        },
        move: {
            enable: true,
            "outModes": "out",
            speed: 0.3,
        },
        links: {
            color: {
                value: "random",
            },
            distance: 150,
            enable: true,
            opacity: 0.8,
            "z-index": {
                value: 1,
            },
        },
        number: {
            density: {
                enable: true,
                area: 800,
            },
            limit: 100,
            value: 40,
        },
        opacity: {
            value: 0.5,
        },
        shape: {
            options: {
                image: [
                    {
                        src: "/js/plugins/tsparticles/assets/svg/blank.svg",
                    },
                    {
                        src: "/js/plugins/tsparticles/assets/svg/blank.svg",
                    },
                    {
                        src: "/js/plugins/tsparticles/assets/svg/blank.svg",
                    },
                    {
                        src: "/js/plugins/tsparticles/assets/svg/blank.svg",
                    },
                    {
                        src: "/js/plugins/tsparticles/assets/svg/blank.svg",
                    },
                    {
                        src: "/js/plugins/tsparticles/assets/svg/blank.svg",
                    },
                    {
                        src: "/js/plugins/tsparticles/assets/svg/blank.svg",
                    },
                    {
                        src: "/js/plugins/tsparticles/assets/svg/blank.svg",
                    },
                    {
                        src: "/js/plugins/tsparticles/assets/svg/blank.svg",
                    },
                    {
                        src: "/js/plugins/tsparticles/assets/svg/metaoriginal.svg",
                        replaceColor: true,
                        particles: {
                            color: {
                                value: "#ff0000",
                            },
                        },
                    },
                    {
                        src: "/js/plugins/tsparticles/assets/svg/triangle.svg",
                        replaceColor: true,
                        particles: {
                            color: {
                                value: "#f0f",
                            },
                        },
                    },
                    {
                        src: "/js/plugins/tsparticles/assets/svg/triangleopen.svg",
                        replaceColor: true,
                        particles: {
                            color: {
                                value: "#00f",
                            },
                        },
                    },
                    {
                        src: "/js/plugins/tsparticles/assets/svg/triball.svg",
                        replaceColor: true,
                        particles: {
                            color: {
                                value: "#ffff00",
                            },
                        },
                    },
                ],
            },
            type: "image",
        },

        size: {
            random: {
                enable: true,
                minimumValue: 40,
            },
            value: 80,
            animation: {
                enable: true,
                speed: 10,
                minimumValue: 30,
            },
        },
    },
});
