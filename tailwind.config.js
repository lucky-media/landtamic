module.exports = {
    content: [
        "./resources/**/*.antlers.html",
        "./resources/**/*.blade.php",
        "./content/**/*.md",
    ],
    theme: {
        container: {
            center: true,
            padding: "1rem",
        },
        fontSize: {
            xs: ["12px", "20px"],
            sm: ["14px", "22px"],
            base: ["16px", "26px"],
            lg: ["18px", "28px"],
            xl: ["20px", "30px"],
            "2xl": ["24px", "32px"],
            "3xl": ["28px", "40px"],
            "4xl": ["40px", "54px"],
            "5xl": ["48px", "64px"],
            "6xl": ["72px", "98px"],
        },
        extend: {
            fontFamily: {
                sans: "Manrope",
            },
            colors: {
                black: "#0B0D17",
                primary: {
                    900: "#253F50",
                    800: "#516573",
                    100: "#DDE1E4",
                },
                secondary: {
                    900: "#E03752",
                    800: "#E65F75",
                    100: "#FAE0E4",
                },
                info: {
                    900: "#7E60C4",
                    800: "#9880D0",
                    100: "#EBE6F6",
                },
                success: {
                    900: "#259862",
                    800: "#51AD81",
                    100: "#DDEFE6",
                },
                accent: {
                    pink: "#F39F9F",
                    ombre: "#F3E0C6",
                    cyan: "#37ABAF",
                    "cyan-light": "#B7E1E2",
                    green: "#9BD4B0",
                    blue: "#30869F",
                },
                gray: {
                    100: "#F4F5F7",
                    200: "#EEEFF4",
                    300: "#D9DBE1",
                    700: "#969BAB",
                    800: "#474A57",
                    900: "#18191F",
                },
                purple: {
                    900: "#8C30F5",
                    800: "#D6B1FF",
                    100: "#F1E4FF",
                },
                cyan: {
                    900: "#2EC5CE",
                    800: "#75E3EA",
                    700: "#A0DCFF",
                    100: "#D5FAFC",
                },
            },
            boxShadow: {
                nav: "0px 1px 0px #E5E9F2",
                gray: "0px 30px 40px rgba(212, 217, 232, 0.2)",
                dark: "0px 10px 20px rgba(41, 41, 42, 0.07)",
                "dark-lg": "-2px 4px 45px rgba(0, 0, 0, 0.13)",
            },
            typography: (theme) => ({
                lg: {
                    css: {
                        color: theme("colors.gray.900"),
                    },
                },
            }),
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        // eslint-disable-next-line no-undef
        require("tailwindcss-debug-screens"),
    ],
};
