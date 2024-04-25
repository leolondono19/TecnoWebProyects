<template>
    <ul class="navigation clearfix">
        <!--Keep This Empty / Menu will come through Javascript-->
        <li>
            <router-link to="/page-contact">Inicio</router-link>
        </li>
        <li class="dropdown" :class="{ 'current': isActive.key === 1 }">
            <router-link to="/">Home</router-link>
            <ul :class="{ 'd-block': isActive.key === 1 }">
                <li>
                    <router-link to="/">Home page 01</router-link>
                </li>
                <li>
                    <router-link to="/index-2">Home page 02</router-link>
                </li>
            </ul>
            <div class="dropdown-btn" :class="{ 'active': isActive.key === 1 }" @click="handleClick(1)"><i
                    class="fa fa-angle-down"></i></div>
        </li>
        <li class="dropdown" :class="{ 'current': isActive.key === 2 }">
            <router-link to="/#">Pages</router-link>
            <ul :class="{ 'd-block': isActive.key === 2 }">
                <li>
                    <router-link to="/page-about">About</router-link>
                </li>
                <li class="dropdown">
                    <router-link to="/#">Team</router-link>
                    <ul>
                        <li>
                            <router-link to="/page-team">Team List</router-link>
                        </li>
                        <li>
                            <router-link to="/page-team-details">Team Details</router-link>
                        </li>
                    </ul>
                    <div class="dropdown-btn"><i class="fa fa-angle-down"></i></div>
                </li>
            </ul>
            <div class="dropdown-btn" :class="{ 'active': isActive.key === 2 }" @click="handleClick(2)"><i
                    class="fa fa-angle-down"></i></div>
        </li>
        <li class="dropdown" :class="{ 'current': isActive.key === 6 }">
            <router-link to="/#">News</router-link>
            <ul :class="{ 'd-block': isActive.key === 6 }">
                <li>
                    <router-link to="/news-grid">News Grid</router-link>
                </li>
                <li>
                    <router-link to="/news-details">News Details</router-link>
                </li>
            </ul>
            <div class="dropdown-btn" :class="{ 'active': isActive.key === 6 }" @click="handleClick(6)"><i
                    class="fa fa-angle-down"></i></div>
        </li>
        <li>
            <router-link to="/page-contact">Contact</router-link>
        </li>
    </ul>
</template>
<script setup>
import { ref } from 'vue'

const isActive = ref({
    status: false,
    key: '',
})

const handleClick = (key) => {
    if (isActive.value.key === key) {
        isActive.value.status = false
    } else {
        isActive.value.status = true
        isActive.value.key = key
    }
}
</script>
