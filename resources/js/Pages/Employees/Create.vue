<!-- resources/js/Pages/Employees/Create.vue -->
<script setup>
// import { usePage } from '@inertiajs/vue3';
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    first_name: '',
    last_name: '',
    email: '',
    phone_number: '',
    hire_date: '',
    position: '',
    department:'',
    salary: '',
    area_id: '',
})  
  
  
const submitForm = ()=> {
    // Aquí puedes enviar los datos del formulario al servidor (Laravel) para el proceso de inserción
     console.log('Datos enviados:', form);

    //const { $inertia } = usePage();  


    try {
    form.post(route("employees.store"));
    // Redireccionar a la página de lista de empleados después de la creación exitosa
    //this.$inertia.visit(route('employees.index'));
    } catch (error) {
    // Manejar errores de la solicitud (puedes mostrar mensajes de error, etc.)
    console.error('Error al enviar el formulario:', error);
    }
}

</script>


<template>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
        <h1 class="text-3xl font-bold mb-4">Create Employee</h1>

        <form @submit.prevent="submitForm">
          <div class="mb-4">
            <label for="first_name" class="block text-sm font-medium text-gray-600">First Name</label>
            <input v-model="form.first_name" type="text" id="first_name" name="first_name" class="mt-1 p-2 border rounded-md w-full">
            <div
                v-if="form.errors.first_name"
                class="text-sm text-red-600"
            >
                {{ form.errors.first_name }}
            </div>
          </div>

          <div class="mb-4">
            <label for="last_name" class="block text-sm font-medium text-gray-600">Last Name</label>
            <input v-model="form.last_name" type="text" id="last_name" name="last_name" class="mt-1 p-2 border rounded-md w-full">
            <div
                v-if="form.errors.last_name"
                class="text-sm text-red-600"
            >
                {{ form.errors.last_name }}
            </div>
          </div>

          <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
            <input v-model="form.email" type="email" id="email" name="email" class="mt-1 p-2 border rounded-md w-full">
            <div
                v-if="form.errors.email"
                class="text-sm text-red-600"
            >
                {{ form.errors.email }}
            </div>
          </div>

          <div class="mb-4">
            <label for="phone_number" class="block text-sm font-medium text-gray-600">Phone Number</label>
            <input v-model="form.phone_number" type="text" id="phone_number" name="phone_number" class="mt-1 p-2 border rounded-md w-full">
            <div
                v-if="form.errors.phone_number"
                class="text-sm text-red-600"
            >
                {{ form.errors.phone_number }}
            </div>
          </div>

          <div class="mb-4">
            <label for="hire_date" class="block text-sm font-medium text-gray-600">Hire Date</label>
            <input v-model="form.hire_date" type="date" id="hire_date" name="hire_date" class="mt-1 p-2 border rounded-md w-full">
            <div
                v-if="form.errors.hire_date"
                class="text-sm text-red-600"
            >
                {{ form.errors.hire_date }}
            </div>
          </div>

          <div class="mb-4">
            <label for="position" class="block text-sm font-medium text-gray-600">Position</label>
            <input v-model="form.position" type="text" id="position" name="position" class="mt-1 p-2 border rounded-md w-full">
            <div
                v-if="form.errors.position"
                class="text-sm text-red-600"
            >
                {{ form.errors.position }}
            </div>
          </div>

            <div class="mb-4">
            <label for="department" class="block text-sm font-medium text-gray-600">department</label>
            <input v-model="form.department" type="text" id="department" name="department" class="mt-1 p-2 border rounded-md w-full">
            <div
                v-if="form.errors.department"
                class="text-sm text-red-600"
            >
                {{ form.errors.department }}
            </div>
          </div>

          <div class="mb-4">
            <label for="salary" class="block text-sm font-medium text-gray-600">Salary</label>
            <input v-model="form.salary" type="text" id="salary" name="salary" class="mt-1 p-2 border rounded-md w-full">
            <div
                v-if="form.errors.salary"
                class="text-sm text-red-600"
            >
                {{ form.errors.salary }}
            </div>
          </div>

          <div class="mb-4">
            <label for="area_id" class="block text-sm font-medium text-gray-600">Area ID</label>
            <input v-model="form.area_id" type="text" id="area_id" name="area_id" class="mt-1 p-2 border rounded-md w-full">
            <div
                v-if="form.errors.area_id"
                class="text-sm text-red-600"
            >
                {{ form.errors.area_id }}
            </div>
          </div>

          <div>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded-md">Create Employee</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>


