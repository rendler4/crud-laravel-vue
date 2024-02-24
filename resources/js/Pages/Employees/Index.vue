<!-- resources/js/Pages/Employees/Index.vue -->
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Employees" />
    <AuthenticatedLayout>     
        <list :employees="employees" /> 
    </AuthenticatedLayout>
</template>

<script>
import List from './List.vue';

export default {
  components: {
    List,
  },
  props: {
    employees: Array, // El array de empleados que se pasa desde el controlador de Laravel
  },
};
</script>
