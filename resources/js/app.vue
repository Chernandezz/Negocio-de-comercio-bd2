<template>
    <div class="base">
        <div class="contenedorComercio">
            <div class="encabezado">
                <h2 class="titulo">TechLife</h2>
                <formulario-agregar-cliente />
            </div>
        </div>
    </div>
</template>

<script>
import formularioAgregarCliente from "./formularioAgregarCliente.vue";
export default {
    components: {
        formularioAgregarCliente
    }
};
</script>

<style scoped>
.base {
    margin: 0;
    padding: 0;
    height: 100vh;
    width: 100vw;
    position: relative;
    
}
.contenedorComercio {
    width: 350px;
    margin: auto;
}
.encabezado {
    background-color: #e6e6e6;
    margin-top: 20px;
    width: 60vw;
    border-radius: 20px;
    padding: 10px;
}
.titulo {
    text-align: center;
    margin: 0;
}
</style>
