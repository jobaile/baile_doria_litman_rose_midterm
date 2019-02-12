export default {
  template: `
    <section>

    <div id="promocontainer">
    <div>
          <div class="row">
              <div class="embed-responsive embed-responsive-16by9">
                  <video autoplay muted loop id="promo_video">
                      <source src="videos/OS_nologo.mp4" type="video/mp4">
                  </video>
              </div>
          </div>
      </div>
</div>

<div id="aboutstart" class="container-fluid">
  <div class="row">
    <div class="col-5" id="about_leftside">
      <h2>FIND YOURSELF AT HOME</h2>
    </div>


    <div class="col-7 text-center" id="about_rightside">
      <h3>SUBSCRIBE TO LEARN MORE</h3>
      <router-link :to="{ path: '/signup'}">
      <button type="button" class="btn btn-outline-dark">CLICK HERE</button>
      </router-link>
    </div>
  </div>
</div>



<div id="fact1" class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-7 align-middle well" id="fact1all">
      <p class="factleft">Ontario makes up about one fifth of the world's fresh water.</p>
      <img class="iconright" src="images/water_icon.png" alt="icon1">
    </div>
  
  </div>
</div>

<div id="image1" class="container-fluid">
    <div class="row">
      <div class="col justify-content-center">
      </div>
    </div>
</div>

<div id="fact2" class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-7 align-middle well" id="fact2all">
        <p class="factright">Ontario's largest hiking trail is the Ganaraska Trail, which spans for over 500km.</p>
        <img class="iconleft" src="images/tree_icon.png" alt="icon1">
      </div>
    
    </div>
</div>
  
  <div id="image2" class="container-fluid">
      <div class="row">
        <div class="col justify-content-center">
        </div>
      </div>
  </div>

  <div id="fact3" class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-7 align-middle well" id="fact3all">
          <p class="factleft">Toronto is home to the third tallest building in the world, the CN tower.</p>
          <img class="iconright" src="images/tower_icon.png" alt="icon1">
        </div>
      
      </div>
  </div>
    
    <div id="image3" class="container-fluid">
        <div class="row">
          <div class="col justify-content-center">

          </div>
        </div>
    </div>
    
    <div id="fact4" class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-7 align-middle well" id="fact4all">
            <p class="factright">Muskoka is home to over 1,600 lakes and 3,000 cottages.</p>
            <img class="iconleft" src="images/chair_icon.png" alt="icon1">
          </div>
        
        </div>
    </div>

    </div>
    </section>
  `,

  data() {
      return{
          message: "This is from promoComponent",
      }
  },

  methods: {

  }
}