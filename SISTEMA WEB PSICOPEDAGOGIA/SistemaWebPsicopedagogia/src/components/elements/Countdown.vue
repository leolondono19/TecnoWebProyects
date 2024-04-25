<template>
    <div class="time-countdown" data-countdown="2/2/2023">
        <div class="counter-column">
            <span class="count">{{ timeParts.days }}</span>
            <span class="title">Days</span>
        </div>
        <div class="counter-column">
            <span class="count">{{ timeParts.hours }}</span>
            <span class="title">Hours</span>
        </div>
        <div class="counter-column">
            <span class="count">{{ timeParts.minutes }}</span>
            <span class="title">Minutes</span>
        </div>
        <div class="counter-column">
            <span class="count">{{ timeParts.seconds }}</span>
            <span class="title">Seconds</span>
        </div>
    </div>
</template>
<script setup>
const { countDay } = defineProps(['countDay'])
import { ref, onMounted, onUnmounted } from 'vue'

const msInSecond = 1000
const msInMinute = 60 * msInSecond
const msInHour = 60 * msInMinute
const msInDay = 24 * msInHour

const getPartsOfTimeDuration = (duration) => {
    const days = Math.floor(duration / msInDay)
    const hours = Math.floor((duration % msInDay) / msInHour)
    const minutes = Math.floor((duration % msInHour) / msInMinute)
    const seconds = Math.floor((duration % msInMinute) / msInSecond)

    return { days, hours, minutes, seconds }
}
const currentTime = new Date()
currentTime.setDate(currentTime.getDate() + countDay)
const targetDate = ref(currentTime)
const timeRemaining = ref(targetDate.value.getTime() - Date.now())
const timeParts = ref(getPartsOfTimeDuration(timeRemaining.value))

const updateCountdown = () => {
    timeRemaining.value = Math.max(targetDate.value.getTime() - Date.now(), 0)
    timeParts.value = getPartsOfTimeDuration(timeRemaining.value)
}

onMounted(() => {
    const intervalId = setInterval(updateCountdown, 1000)

    onUnmounted(() => {
        clearInterval(intervalId)
    })
});

</script>