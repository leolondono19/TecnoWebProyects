import { fileURLToPath, URL } from 'node:url'
import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [
    vue(),
  ],
  resolve: {
    alias: {
      '@': fileURLToPath(new URL('./src', import.meta.url))
    }
  },
  head: {
    meta: [
      { name: 'viewport', content: 'width=device-width, initial-scale=1' }
    ],
    title: 'Edulerns | Education Courses Vue Template',
    script: []
  },
  css: [
    'swiper/css',
    'swiper/css/navigation',
    'swiper/css/pagination',
    '/css/bootstrap.min.css',
    '/css/style.css',
    '/css/responsive.css'
  ],
  modules: [
    [
      "@nuxtjs/google-fonts",
      {
          families: {
              Chivo: {
                  wght: [400, 700, 900]
              },
              "Noto+Sans": {
                  wght: [400, 500, 600, 700,800]
              },
              download: true,
              inject: true
          }
      }
    ],
  ],
  build: {
    assetsDir: 'assets',
    outDir: 'dist',
    rollupOptions: {
      output: {
        entryFileNames: `assets/[name].js`,
        chunkFileNames: `assets/[name].js`,
        assetFileNames: `assets/[name].[ext]`
      }
    }
  }
})
