

/*
    endPoints.js es donde defines todas las funciones específicas que tu aplicación necesita. 
*/

import CrudManager from "./crudManager.js";

const apiService = new CrudManager('./src/database/'); // crea un objeto de CrudManager y le manda la ruta generica

/*
    Aquí no necesitamos usar async/await porque no estamos esperando el resultado en ese punto
    simplemente dejamos que el formulario que llama a esa función decida qué hacer con la promesa.
*/

const createProduct = (dataForm) => apiService.createData('producto', dataForm, 'crudProducto');


// READ ALL

const selectAllProducts = () => apiService.readAllData('producto');
const selectAllCategoria = () => apiService.readAllData('categoria');


// UPDATE
const updateProduct = (datosFila) => apiService.updateData('producto', datosFila, 'crudProducto');

// DELETE
const deleteProduct = (id) => apiService.deleteData('producto', id, 'crudProducto');

export default {
    createProduct,
    selectAllProducts,
    selectAllCategoria,
    updateProduct,
    deleteProduct
}
