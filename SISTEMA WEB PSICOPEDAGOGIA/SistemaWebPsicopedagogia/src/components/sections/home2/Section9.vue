<template>
    <section class="video-section">
        <div class="bg-image" style="background-image: url(./images/background/6.jpg)"></div>
        <div class="auto-container">
            <div class="outer-box">
                <div class="title-box">
                    <h2 class="title">Take a video tour to learn<br> intro of campus</h2>
                    <NuxtLink to="/page-about" class="theme-btn btn-style-one bg-theme-color3">Discover more
                    </NuxtLink>
                </div>
                <div class="video-box wow fadeInUp">
                    <span class="float-icon icon-arrow-2"></span>
                    <NuxtLink @click="openVideo" class="play-btn lightbox-image"><i
                            class="icon fa fa-play"></i></NuxtLink>
                </div>
            </div>
        </div>
    </section>
    <modal-video :channel="videoChannel" :videoId="videoId" v-model:isOpen="videoIsOpen" />
</template>
<script>
import ModalVideo from '../../components/elements/ModalVideo.vue'
export default {
    components: {
        ModalVideo
    },
    data: () => {
        return {
            videoIsOpen: false
        }
    },
    methods: {
        openVideo() {
            this.videoIsOpen = !this.videoIsOpen
        }
    },
    computed: {
        videoChannel: function () {
            //Logic to extract based on URL
            return 'youtube'
        },
        videoId: function () {
            //Logic to extract based on URL
            return 'QiqQoqtnHrk'
        }
    }
}
</script>