/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./**/*.php",
      "./src/**/*.js"
    ],
    theme: {
      extend: {
        "colors": {
            "tblue": "#2C5F93",
            "tlightblue": "#A1C7E3",
            "tyellow": "#FEC44D",
            "tlightyellow": "#FED78F",
            "tred": "#CF202F",
            "tgray": "#3E3E3F",
            "tdark": "#111111",
        },
        screens: {
          "abt-880": "880px",
        },
      },
    },
    plugins: [],
  }
  
  