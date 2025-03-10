/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage:{
        headerGradient:"linear-gradient(50deg,#063F9C 65% , #01BAEE 100%)",
        navGradient:"linear-gradient(50deg,#063F9C 0%,#01BAEE 100%)"
      },
      colors:{
        yellowOrange: "var(--yellow-orange)",
        golden:"var(--golden)"
      }
    },
    screens: {
      lsm: "350px",

      esm: "400px",

      em: "480px",

      ew: "510px",

      vem: "560px",

      sm: "640px",

      md: "768px",

      emd: "992px",

      lg: "1024px",

      xlg: "1150px",

      xl: "1280px",

      mxl: "1330px",

      "1xl": "1440px",

      "2xl": "1500px",

      "3xl": "1800px",

      "4xl": "1920px"
    },
    fontFamily:{
      JosefinSans:["Josefin Sans","sans-serif"],
      Roboto:["Roboto","sans-serif"]
    }
  },
  plugins: [],
}