<template>
  <div id="card">
      <div class="card-body">
        <div class="card-body2">
          <h1 style="padding:0; margin:0; border-bottom: 1px solid rgb(255, 255, 255); border-radius: 5px; text-transform:capitalize">Order</h1>
          <p id="titlee">Food Name: {{food.food_name}}</p>
          <p id="titlee">Price: &#8369;{{food.price}}</p>
          <p id="titlee">Qty. {{food.quantity}}</p>
          <p id="titlee">Customer's Name: {{food.cust_name}}</p>
          <p id="titlee">Mobile Number: {{food.phone_number}}</p>
            <button class="edit" @click="toogleEditor"><i class="far fa-edit"></i>&nbsp;{{ editor.label }}</button>
            <button class="delete" @click="deleteOrder"><i class="far fa-trash-alt"></i>&nbsp;Delete</button>
            <button class="back" onclick="history.back()"><i class='fas fa-reply'></i>&nbsp;Back</button>
        </div>
      </div>
  </div>
            <div id="form">
                <div v-if="editor.show" id="form1">
                    <h3 style="border-bottom: 1px solid  rgb(255, 255, 255); border-radius: 5px;">Edit Order</h3>
                        <div>
                            <label for="title">Food Name</label>
                            <input type="text" v-model="food.food_name" class="w3-input w3-border">
                        </div>
                        <div>
                            <label for="title">Price</label>
                            <input type="text" v-model="food.price" class="w3-input w3-border">
                        </div>
                        <div>
                            <label for="title">Quantity</label>
                            <input type="text" v-model="food.quantity" class="w3-input w3-border">
                        </div>
                        <div>
                            <label for="title">Name</label>
                            <input type="text" v-model="food.cust_name" class="w3-input w3-border">
                        </div>
                        <div>
                            <label for="title">Phone Number</label>
                            <input type="text" placeholder="09-XXXXXXXXX" v-model="food.phone_number" class="w3-input w3-border">
                        </div>
                        <button class="save" @click="saveOrder" style="margin-top: 10px;"><i class="fas fa-save"></i>&nbsp;
                            Save
                        </button>
                 </div>
            </div>
</template>

<script>
export default {
    props: ['id'],
    data() {
        return {
            food: {},
            editor: {
                show: false,
                label: "Edit"
            }
        }
    },
    methods: {
        toogleEditor() {
            if(this.editor.show) {
                this.editor = {show: false, label:"Edit"}
            }else{
                this.editor = {show: true, label:"Close"}
            }
        },
        saveOrder() {
            fetch('http://localhost:8000/api/foods/' + this.food.id,{
                method: 'put',
                headers: {
                    'Content-Type':"application/json"
                },
                credentials: 'same-origin',
                body: JSON.stringify(this.food)
            })
            .then(res=>res.json())
            .then(data=>{
                swal("All done!", "Order successfully updated.", "success")
            })
            .catch(err => console.log(err))
                swal("Ops!", "Error please fix something.", "error")
        },
        deleteOrder() {
            fetch('http://localhost:8000/api/foods/' + this.food.id, {
                method:'delete'
            })
            .then(res=>res.json())
            .then(data=>{
                swal("Deleted!", "Order successfully deleted.", "info")
                this.$router.push({
                    name: 'all-foods'
                })
            })
            .catch(err => console.log(err))
        }
    },
    mounted() {
        fetch('http://localhost:8000/api/foods/' + this.id)
        .then(res=>res.json())
        .then(data=>this.food=data)
    }
}
</script>

<style>
.card-body {
    margin: auto;
    width: 46%;
    padding: 0 10px;
}
.card-body2 {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.682), 0 6px 20px 0 rgba(0, 0, 0, 0.616);
    padding: 16px;
    background-color: rgba(0, 0, 0, 0.418);
    border-radius: 10px;
}
.card-body2 h1 {
    text-align: center;
}
#card {
    margin-top: 50px;
}
h1{
    color:rgb(255, 255, 255);
}
#titlee {
    color:rgb(255, 255, 255);
    font-size: 20px;
    font-family: sans-serif;
    font-weight: 200;
}
#form1 {
    border: 2px solid rgba(78, 77, 77, 0.672);
    border-radius: 10px;
    margin: auto;
    text-align: center;
    width: 400px;
    height: 440px;
    margin-top: 50px;
    background-color: rgba(10, 10, 10, 0.33);
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.682), 0 6px 20px 0 rgba(0, 0, 0, 0.616);
    color: rgb(255, 255, 255);
    padding: 10px;
}
input {
    background-color: rgba(191, 191, 191, 0.527);
    color: rgb(255, 255, 255);
    font-weight: bold;
}
input:hover {
    background-color: rgba(157, 157, 157, 0.045);
    box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
}
.edit {
    width: 80px;
    height: 35px;
    background-color: rgb(7, 79, 0);
    border-radius: 3px;
    cursor: pointer;
    border: 0;
    color: rgb(248, 248, 248);
}
.edit:hover {
    background-color: rgb(9, 128, 0);
}
.delete {
    width: 80px;
    height: 35px;
    background-color: rgb(97, 0, 0);
    border-radius: 3px;
    margin-left: 8px;
    cursor: pointer;
    border: 0;
    color: rgb(248, 248, 248);
}
.delete:hover {
    background-color: rgb(193, 0, 0);
}
.back {
    width: 70px;
    height: 35px;
    background-color: rgba(89, 89, 89, 0.571);
    border-radius: 3px;
    cursor: pointer;
    border: 0;
    margin-left: 38.9%;
    color: rgb(248, 248, 248);
}
.back:hover {
    background-color: rgba(148, 148, 148, 0.659);
}
.save {
    width: 70px;
    height: 40px;
    background-color: rgba(177, 134, 47, 0.729);
    border-radius: 3px;
    cursor: pointer;
    color: rgb(255, 255, 255);
    border: 0px;
}
.save:hover {
    background-color: rgba(235, 164, 22, 0.665);
}
</style>