<template>
<div class="about">
  <section>
    <div class = "image"></div>
      <div class = "content">
          <h2>About Us</h2>
          <div style="margin-top: -30px; padding: 5px; width: 200px; "><hr></div>
            <p id="textt">A restaurant is a business that prepares and serves food and drinks to customers. Meals are generally served and eaten on the premises, but many restaurants also offer take-out and food delivery services.</p>
            <div style="width: 200px"><hr></div>
            <p id="textt">Restaurant operations, in the simplest terms, are various activities that are carried out in a restaurant to run the business. These include all activities involved in the preparation of food, customer service, cleaning, purchasing raw materials, accounting, reporting, etc.</p>
            <button class="learn-more">Learm More</button>
      </div>
  </section>
</div>
</template>

<style>
.about{
  font-family: 'Playfair Display', serif;
  display: grid;
  align-content: center;
  min-height: 100vh;
}
section{
  display: grid;
  grid-template-columns: 1fr 1fr;
  min-height: 90vh;
  width: 85vw;
  margin: 0 auto;
}
.image{
  background: url("@/assets/about-us.jpg") center/cover no-repeat;
  width: 400px;
}
.content{
	background-color: rgba(0, 0, 0, 0.35);
  display: flex;
  border-radius: 1px;
  justify-content: center;
  flex-direction: column;
  align-items: center;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.539), 0 6px 20px 0 rgba(0, 0, 0, 0.424);
  width: 600px;
  margin-right: 530px;
}
.content h2{
  text-transform: uppercase;
  font-size: 46px;
  letter-spacing: 6px;
  color: rgb(255, 255, 255);
}
.content #textt{
  padding-bottom: 15px;
  font-weight: 400;
  width: 80%;
  text-align: center;
  font-family: sans-serif;
  margin: 0 auto;
  line-height: 1.7;
  color: rgb(255, 255, 255);
  font-size: 17px;
}
hr {
  height: 20px;
}
.learn-more {
  width: 130px;
  height: 45px;
  background-color: rgba(0, 0, 0, 0.172);
  border-radius: 3px;
  margin-top: 15px;
  cursor: pointer;
  color: rgb(251, 247, 247);
  border: 0px;
}
.learn-more:hover {
  background-color: rgba(0, 0, 0, 0.285);
}
</style>
