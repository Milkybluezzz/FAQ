import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};

module.exports = {
    theme: {
      extend: {
        keyframes: {
          floating: {
            '0%, 100%': { transform: 'translateY(0)' },  // posisi awal dan akhir (tanpa pergerakan)
            '50%': { transform: 'translateY(-10px)' },  // naik sedikit pada titik tengah animasi
          },
        },
        animation: {
          floating: 'floating 4s ease-in-out infinite',  // animasi mengambang dengan durasi 4 detik, berulang tanpa batas
        },
      },
    },
  }