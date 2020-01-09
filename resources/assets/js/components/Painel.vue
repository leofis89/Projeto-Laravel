<template>

    <div :class="defineCor">
        
        <div class="panel-heading">{{titulo}}</div>

        <div class="panel-body">
            <slot></slot>
        </div>
    </div>
    
</template>


<script>
    export default {
        props:['titulo', 'cor'], // Deixar titulo e cor dinâmicos;
        
        computed: { 
            defineCor: function(){
                return "panel "+ (this.cor || "panel-success");
            }

        }
    }
</script>

<style >

    .panel-danger {
        border-color:blueviolet;
    }
    .panel-warning {
    border-color:deeppink;
}
    .panel-info {
    border-color: darkcyan;
}

    .panel-success {
    border-color:green;
}
</style>