<!-- resources/js/Pages/Employees/List.vue -->
<template>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
        <h1 class="text-3xl font-bold mb-4">List of Employees</h1>
        <Link :href="route('employees.create')" class="bg-blue-500 text-white px-4 py-2 rounded-md">Create Employee</Link>

        <div class="overflow-x-auto">
          <table class="min-w-full bg-white border border-gray-300">
            <thead>
              <tr>
                <th class="py-2 px-4 border-b">First Name</th>
                <th class="py-2 px-4 border-b">Last Name</th>
                <th class="py-2 px-4 border-b">Actions</th>
                <!-- Agrega más encabezados según sea necesario -->
              </tr>
            </thead>
            <tbody>
              <tr v-for="employee in employees" :key="employee.id" class="hover:bg-gray-100">
                <td class="py-2 px-4 border-b">{{ employee.first_name }}</td>
                <td class="py-2 px-4 border-b">{{ employee.last_name }}</td>
                <td class="py-2 px-4 border-b">
                    <div class="mt-4">
                        <button @click="editEmployee(employee.id)" class="bg-blue-500 text-white px-4 py-2 rounded-md mr-2">
                            Editar
                        </button>
                        <button @click="deleteEmployee(employee.id)" class="bg-red-500 text-white px-4 py-2 rounded-md">
                            Eliminar
                        </button>
                    </div>
                </td>
                <!-- Agrega más celdas según sea necesario -->
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { Link } from '@inertiajs/vue3';
export default {
  components: {
    Link,
  },
  props: {
    employees: Array, // El array de empleados que se pasa desde el controlador de Laravel
  },
  methods: {
    editEmployee(employeeId) {
      // Lógica para editar un empleado (puedes redirigir a la página de edición, etc.)
      console.log('Editar empleado con ID:', employeeId);
    },
    deleteEmployee(employeeId) {
      // Lógica para eliminar un empleado (puedes mostrar un modal de confirmación, realizar una solicitud DELETE, etc.)
      console.log('Eliminar empleado con ID:', employeeId);
    },
  },
};
</script>
