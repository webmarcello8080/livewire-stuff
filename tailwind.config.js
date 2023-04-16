/** @type {import('tailwindcss').Config} */

module.exports = {
  content: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.scss',
    './resources/**/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    container: {
      // Center container elements by default
      center: true,
      screens: {
          xs: "100%",
          sm: "100%",
          md: "100%",
          lg: "100%",
          xl: "1280px",
          "2xl": "1280px",
          "3xl": "1280px",
      },
      padding: {
          DEFAULT: "1.25rem",
      },
    },
    // Define the typical breakpoints of devices for use within the normal Tailwind classes
    screens: {
      xs: "480px",
      sm: "640px",
      md: "768px",
      lg: "1024px",
      xl: "1280px",
      "2xl": "1536px",
      "3xl": "1920px",
      "4xl": "2560px",
    },
    fontFamily: {
      "open-sans": ["Open Sans", "sans-serif"], // create css class 'font-'
    },
    fontSize: {
      sm: ["0.875rem", { lineHeight: "1.312rem" }],
      base: ["1rem", { lineHeight: "1.5rem" }],
      lg: ["1.175rem", { lineHeight: "1.673rem" }],
      xl: ["1.4rem", { lineHeight: "1.673rem" }],
      "2xl": ["1.6rem", { lineHeight: "1.92rem" }],
      "3xl": ["1.8rem", { lineHeight: "2.16rem" }],
      "4xl": ["1.925rem", { lineHeight: "2.31rem" }],
      "5xl": ["2.2rem", { lineHeight: "2.64rem" }],
      "6xl": ["2.6rem", { lineHeight: "3.12rem" }],
      "7xl": ["2.8rem", { lineHeight: "3.36rem" }],
      "8xl": ["3rem", { lineHeight: "3.6rem" }],
      "9xl": ["3.4rem", { lineHeight: "4rem" }],
      "10xl": ["4rem", { lineHeight: "4.8rem" }],
    },
    colors: {
      transparent: "transparent",
      current: "currentColor",
      white: "#fff",
      black: "#000",
      red: "red",
      "grey": "#F2F4F4",
    },
  },
  plugins: [],
}

