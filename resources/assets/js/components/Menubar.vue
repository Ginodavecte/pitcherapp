<template>
    <div class="container">
      <div class="panel-group" role="tablist">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="collapseListGroupHeading1">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" href="#categories" aria-expanded="false" aria-controls="collapseListGroup1">
                Categories
              </a>
            </h4>
          </div>
          <div id="categories" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1">
            <ul class="list-group">
              <li class="list-group-item"><input type="checkbox" name="brand"> Category 1</li>
              <li class="list-group-item"><input type="checkbox" name="brand"> Category 2</li>
              <li class="list-group-item"><input type="checkbox" name="brand"> Category 3</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="panel-group" role="tablist">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="collapseListGroupHeading1">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" href="#brands" aria-expanded="false" aria-controls="collapseListGroup1">
                Brands
              </a>
            </h4>
          </div>
          <div id="brands" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1">
            <ul class="list-group">
              <li class="list-group-item"><input type="checkbox" name="brand"> Brand 1</li>
              <li class="list-group-item"><input type="checkbox" name="brand"> Brand 2</li>
              <li class="list-group-item"><input type="checkbox" name="brand"> Brand 3</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="panel-group" role="tablist">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="collapseListGroupHeading1">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" href="#color" aria-expanded="false" aria-controls="collapseListGroup1">
                Color
              </a>
            </h4>
          </div>
          <div id="color" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1">
            <select class="form-control">
              <option>Color 1</option>
              <option>Color 2</option>
              <option>Color 3</option>
              <option>Color 4</option>
              <option>Color 5</option>
            </select>
          </div>
        </div>
      </div>

      <div class="panel-group" role="tablist">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="collapseListGroupHeading1">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" href="#size" aria-expanded="false" aria-controls="collapseListGroup1">
                Size
              </a>
            </h4>
          </div>
          <div id="size" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1">
            <select class="form-control">
              <option>Size 1</option>
              <option>Size 2</option>
              <option>Size 3</option>
              <option>Size 4</option>
              <option>Size 5</option>
            </select>
          </div>
        </div>
      </div>

      <div class="panel-group" role="tablist">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="collapseListGroupHeading1">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" href="#price" aria-expanded="false" aria-controls="collapseListGroup1">
                Price
              </a>
            </h4>
          </div>
          <div id="price" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1">
            <p><input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;"></p>
            <div id="slider-range"></div>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
    export default {
      data() {
        return {
        active: 'home',
        url1: "http://localhost:8000/",
        url2: "/categories",
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
