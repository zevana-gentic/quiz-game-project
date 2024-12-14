import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                "source-poppins": ["Poppins"],
                "source-potta-one": ["Potta One"],
                "source-pt-mono": ["PT Mono"],
            },
            animation: {
                'spin-slow': 'spin 3s linear infinite',
                'bounce-slow': 'bounce 4s linear infinite',
                wiggle: 'wiggle 2s ease-in-out infinite',
                'up-down': 'upDown 5s ease-in-out infinite',
                'up-down-v2': 'upDownV2 5s ease-in-out infinite',
                'down-up': 'downUp 5s ease-in-out infinite',
                'grow': 'grow 5s ease-in-out infinite',
                'grow-once': 'growOnce 3s ease-in-out forwards',
                scaleUp: 'scaleUp 0.5s ease-out forwards'
              },
            keyframes: {
                wiggle: {
                  '0%, 100%': { transform: 'rotate(-5deg)' },
                  '50%': { transform: 'rotate(5deg)' }
                },
                upDown: {
                  '0%, 100%': { transform: 'translateY(-25%)' },
                  '50%': { transform: 'translateY(25%)' }
                },
                upDownV2: {
                  '0%, 100%': { transform: 'translateY(-12%)' },
                  '50%': { transform: 'translateY(12%)' }
                },
                grow: {
                  '20%': { transform: 'scale(0.0)' },
                  '100%': { transform: 'scale(1)' }
                },
                growOnce: {
                  '0%': { transform: 'scale(0.0)' },
                  '100%': { transform: 'scale(1)' }
                },
                scaleUp: {
                    '0%': { transform: 'scale(0.25)', opacity: '0' },
                    '100%': { transform: 'scale(1)', opacity: '1' }
                },
              }
        },
    },
    plugins: [],
};
