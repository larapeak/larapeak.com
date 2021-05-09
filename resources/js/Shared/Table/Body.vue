<template>
    <tr v-for="entry in tabledata" :key="entry.id" class="hover:bg-gray-100 focus-within:bg-gray-100">
        <td class="border-t">
            <inertia-link class="flex items-center px-6 py-4" :href="route('dashboard')">
                {{ entry.id }}
            </inertia-link>
        </td>
        <td class="border-t">
            <inertia-link class="flex items-center px-6 py-4" :href="route('dashboard')">
                {{ entry.title }}
            </inertia-link>
        </td>
        <td class="border-t">
            <inertia-link class="flex items-center px-6 py-4" :href="route('dashboard')">
                <div v-if="entry.published == 1" class="flex items-center px-2 py-1 text-xs text-green-900 bg-green-200 rounded-full">
                    <div class="w-2 h-2 mr-1 bg-green-500 rounded-full"></div>
                    Online
                </div>
                <div v-if="entry.published == 0" class="flex items-center px-2 py-1 text-xs text-yellow-900 bg-yellow-200 rounded-full">
                    <div class="w-2 h-2 mr-1 bg-yellow-500 rounded-full"></div>
                    Draft
                </div>
                <!-- <div v-if="entry.published == 1" class="flex items-center px-2 py-1 text-xs text-red-900 bg-red-200 rounded-full">
                    <div class="w-2 h-2 mr-1 bg-red-500 rounded-full"></div>
                    Deleted
                </div> -->
            </inertia-link>
        </td>
    </tr>
</template>

<script>
export default {
    props: {
        tabledata: Array,
    }
}
</script>