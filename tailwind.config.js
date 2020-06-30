module.exports = {
    purge: [
        './resources/**/*.html',
        './resources/**/*.blade',
        './resources/**/*.vue',
    ],
  theme: {
    extend: {},
  },
  variants: {},
    plugins: [
        require("tailwind-heropatterns")({
            // as per tailwind docs you can pass variants
            variants: [],

            // the list of patterns you want to generate a class for
            // the names must be in kebab-case
            // an empty array will generate all 87 patterns
            patterns: ['circuit-board'],

            // The foreground colors of the pattern
            colors: {
                default: "#9C92AC",
                "blue-dark": "#000044" //also works with rgb(0,0,205)
            },

            // The foreground opacity
            opacity: {
                default: "0.05",
                "100": "1.0"
            }
        }),
    ],
}
