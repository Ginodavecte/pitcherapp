<template>
    <div class="container">
      <div class="row justify-content-center">

          <nav class=" navbar navbar-inverse bg-inverse navbar-toggleable-md" v-bind:class="active" v-on:click.prevent>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#" class="nav-link home" v-on:mouseover="makeActive('home')">Home</a></li>
              <li class="list-inline-item"><a href="#" class="nav-link projects" v-on:mouseover="makeActive('schoenen')">Voetballschoenen</a></li>
              <li class="list-inline-item"><a href="#" class="nav-link services" v-on:mouseover="makeActive('shirts')">Kleding</a></li>
              <li class="list-inline-item"><a href="#" class="nav-link contact" v-on:mouseover="makeActive('shorts')">Accessoires</a></li>
            </ul>
          </nav>


      </div>
      <div class="row justify-content-center">
        <nav v-if="active == 'schoenen'" class="navbar navbar-inverse bg-inverse navbar-toggleable-md">
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#" class="nav-link home" >Merk</a></li>
            <li class="list-inline-item"><a href="#" class="nav-link projects">Ondergrond</a></li>
            <li class="list-inline-item"><a href="#" class="nav-link services">Accessoires</a></li>
            <li class="list-inline-item"><a href="#" class="nav-link contact">Kids</a></li>
          </ul>
        </nav>
        <nav v-if="active == 'shirts'" class="navbar navbar-inverse bg-inverse navbar-toggleable-md">
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#" class="nav-link home" >Trainingskleding</a></li>
            <li class="list-inline-item"><a href="#" class="nav-link projects">Onderkleding</a></li>
            <li class="list-inline-item"><a href="#" class="nav-link services">Teamkleding</a></li>
            <li class="list-inline-item"><a href="#" class="nav-link contact">Clubs</a></li>
          </ul>
        </nav>
        <nav v-if="active == 'shorts'" class="navbar navbar-inverse bg-inverse navbar-toggleable-md">
          <ul class="list-inline">
            <li class="list-inline-item dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle nav-link contact" href="#">Ballen <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Ballen</a></li>
                <li><a href="#">Ballen</a></li>
                <li><a href="#">Ballen</a></li>
                <li><a href="#">Ballen</a></li>
              </ul>
            </li>

            <li class="list-inline-item dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle nav-link contact" href="#">Uitrusting <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Shirts</a></li>
                <li><a href="#">Shirts</a></li>
                <li><a href="#">Shirts</a></li>
                <li><a href="#">Shirts</a></li>
              </ul>
            </li>
            <li class="list-inline-item dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle nav-link contact" href="#">Bescherming <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Scheenbeschermers</a></li>
                <li><a href="#">Scheenbeschermers</a></li>
                <li><a href="#">Scheenbeschermers</a></li>
                <li><a href="#">Scheenbeschermers</a></li>
              </ul>
            </li>



            <li class="list-inline-item dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle nav-link contact" href="#">Keepers <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Shirts</a></li>
                <li><a href="#">Shorts</a></li>
                <li><a href="#">Helm</a></li>
                <li><a href="#">Doel</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
</template>

<script>
    export default {
      data() {
        return {
        active: 'home',
        }
      },
      methods: {
        makeActive: function(item){
            this.active = item;
        },

      },
      mounted() {
          console.log('Component menubar mounted.')
      }
    }
</script>
