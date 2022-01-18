const plugin = require("tailwindcss/plugin");

const half = (value) => {
    return value.replace(/\d+(.\d+)?/, (number) => number / 2);
}

module.exports = plugin.withOptions(function () {
    return function ({ addUtilities, e, theme, variants }) {
        addUtilities({
            '.flex-gap-wrapper': {
                overflow: 'auto',
            },
            // This bit might need some work if you use a custom
            // prefix. See https://tailwindcss.com/docs/plugins#manually-prefixing-selectors
            // for more info on manual prefixing complex selectors.
            '[class*="flex-gap-"]:not([class*="flex-gap-wrapper"])': {
                margin: 'calc(-1 * var(--gap)) 0 0 calc(-1 * var(--gap))',
                '& > *': {
                    margin: 'calc(var(--gap)) 0 0 calc(var(--gap))',
                },
            },
        });

        Object.entries(theme('gap')).forEach(([key, value]) =>
            addUtilities(
                {
                    [`.flex-gap-${e(key)}`]: {
                        '--gap': value,
                    },
                },
                variants('gap'),
            )
        )
    };
})
