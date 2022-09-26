<template>
    <div class="agregarCliente">
        <input type="text" v-model="cliente.nombre" />
    </div>
</template>

<script>
export default {
    data: function() {
        return {
            cliente: {
                nombre: ""
            }
        };
    }
};
</script>

<style scoped>
.agregarCliente {
    display: flex;
    justify-content: center;
    align-items: center;
}
input {
    background: #f7f7f7;
    border: 0px;
    outline: none;
    padding: 5px;
    margin: 10px;
    width: 100%;
}
</style>
