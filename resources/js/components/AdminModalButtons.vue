<template>
    <div>
        <div class="modal-footer">
            <a href="#" class="btn btn-secondary" data-dismiss="modal">Cerrar</a>
            <a href="#" class="btn btn-danger jobRejected">Rechazar</a>
            <a href="#" class="btn btn-success jobAccepted">Aceptar</a>
        </div>
    </div>
</template>

<script>
    export default {
        name: "admin-modal-buttons",
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
