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

.panel-info {
    border-color: darkcyan;
}

.panel-success {
    border-color:green;
}
.panel-danger > .panel-heading {
    color: white;
    background-color: #c74646;
    border-color: #c76969;
}

.panel-warning > .panel-heading {
    color: #cccccc;
    background-color: #9e860b;
    border-color: #9e6f11;
}

.panel-info > .panel-heading {
    color: #dddddd;
    background-color: #047ebb;
    border-color: #0088a3;
}

</style>