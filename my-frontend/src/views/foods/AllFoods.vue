<template>
    <div class="add">
        <div class="form">
            <h1 style="border-bottom: 1px solid  rgb(255, 255, 255); border-radius: 5px;">Add Order</h1>
            <div>
                <label for="title">Food Name</label><br>
                <input type="text" v-model="food.food_name">
            </div>
            <div>
                <label for="title">Price</label><br>
                <input type="number" v-model="food.price">
            </div>
            <div>
                <label for="title">Quantity</label><br>
                <input type="number" v-model="food.quantity">
            </div>
            <div>
                <label for="title">Name</label><br>
                <input type="text" v-model="food.cust_name">
            </div>
            <div style="padding-bottom: 20px;">
                <label for="title">Phone Number</label><br>
                <input type="text" placeholder="09-XXXXXXXXX" v-model="food.phone_number">
            </div>
              <button class="btn" @click="addOrder"><i class="fas fa-hamburger"></i>&nbsp;Order</button>
        </div>
        </div>
    <div>
      <div class="w3-row">
          <div style="padding-left: 24px">
              <h2>Order details</h2>
              <table class="w3-table w3-striped w3-bordered" style="padding: 10px;">
                  <tr style="font-weight: bold;" class="head">
                      <th>Food Name</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Name</th>
                      <th>Phone Number</th>
                  </tr>
                  <tr id="hover" v-for="food in foods" :key="food.id" style="cursor:pointer" @click="openFood(food.id)">
                      <td style="text-transform: capitalize">{{food.food_name}}</td>
                      <td>{{food.price}}</td>
                      <td>{{food.quantity}}</td>
                      <td>{{food.cust_name}}</td>
                      <td>{{food.phone_number}}</td>
                  </tr>
              </table>
          </div>
      </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            foods: [],
            food: {}
        }
    },
    methods: {
        getAllFoods() {
            fetch('http://localhost:8000/api/foods')
            .then(res=>res.json())
            .then(data=>this.foods = data.foods)
            .catch(err=>console.log(err))
        },
        openFood(foodId) {
            this.$router.push({
                name: 'view-food',
                params: {
                    id: foodId
                }
            })
        },
        addOrder() {
            fetch('http://localhost:8000/api/foods', {
                method: 'post',
                headers: {
                    "Content-Type":"application/json"
                },
                credentials: 'same-origin',
                body: JSON.stringify(this.food)
            })
            .then(res=>res.json())
            .then(data=>{
                this.foods.unshift(data)
                this.food={}
                swal("All done!", "Your order has been successfully processed.", "success")
            })
            .catch(err=>console.log(err))
            swal("Ops!", "Error please fix something.", "error")
        }
    },
    mounted() {
        this.getAllFoods()
    }
}
</script>

<style>
.add {
    border: 2px solid rgba(78, 77, 77, 0.672);
    border-radius: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.682), 0 6px 20px 0 rgba(0, 0, 0, 0.616);
    margin: auto;
    text-align: center;
    width: 400px;
    height: 400px;
    margin-top: 50px;
    background-color: rgba(10, 10, 10, 0.461);
    color: rgb(255, 255, 255);
}
h2 {
    color: rgb(255, 255, 255);
    font-family: sans-serif;
    font-weight: bold;
}
h1 {
    color: rgb(255, 255, 255); 
}
.form {
    margin-top: -45px;
}
input {
    background-color: rgba(191, 191, 191, 0.527);
    color: rgb(255, 255, 255);
    font-weight: bold;
}
input:hover {
    background-color: rgba(157, 157, 157, 0.045);
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.539), 0 6px 20px 0 rgba(0, 0, 0, 0.424);
}
.btn {
    width: 80px;
    height: 35px;
    background-color: rgba(226, 191, 122, 0.661);
    border-radius: 3px;
    cursor: pointer;
    color: rgb(57, 57, 57);
    border: 0px;
}
.btn:hover {
    background-color: rgba(250, 227, 180, 0.798);
}
#hover:hover {
    background-color: rgba(41, 41, 41, 0.475);
    transform: scale(1.01);
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.539), 0 6px 20px 0 rgba(0, 0, 0, 0.424);
}
table {
    background-color: rgba(0, 0, 0, 0.412);
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.707), 0 6px 20px 0 rgba(0, 0, 0, 0.616);
    color: rgb(216, 216, 216);
    font-family: sans-serif;
    font-size: 18px;
}
.head {
    background-color: rgba(226, 191, 122, 0.875);
    font-size: 22px;
    color: rgb(255, 255, 255);
}
</style>