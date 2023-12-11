
<main>
    <div class="row">
            <div class="col-md-6 col-12">
                <h2>Search for a car!</h2>

                <form action="#" method="get">
                    <label for="brand">Brand:</label>
                    <select  id="brand" class="form-select" style="width: 30%" onchange="filterByBrand(this)  ">
                        <option value="0">All</option>
                    </select>
            
                    <label for="model">Model:</label>
                    <select  id="model" class="form-select" style="width: 30%" onchange="filterByModels(this)">
                        <option value="0">All</option>
                    </select>
                </form>
            </div>
            <div class="col-md-6 col-12 d-flex flex-column">

                <button type="button" class="btn btn-outline-secondary w-50 mt-5 m-1" onclick="add()">Add</button>
                <button type="button" class="btn btn-outline-secondary w-50 m-1">Delete</button>
                <button type="button" class="btn btn-outline-secondary w-50 m-1" onclick="compare()">Compare</button>
            </div>
            
    </div>  
</main>

    
    <div class="cars d-flex flex-column gap-2 p-2" style="margin: auto;">
        
    </div>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
    getData('../server/cars.php',renderCars)
    
function renderCars(data){
        let a=2
        document.querySelector('.cars').innerHTML=''
        for(let obj of data){
           
            if(a%2==0){
                document.querySelector('.cars').innerHTML+= '<div class="row" id="carrow"></div>'
            }
            document.getElementById('carrow').innerHTML+=`<div class="col-md-6 col-12 mb-3"> 
                    <div class="card p-1 w-100 h-100 ">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5 class="card-title">${obj.Brand} <span style="font-size: 1rem">${obj.Model}</span></h5>
                                    <h6 class="card-subtitle mb-2 text-muted">${obj.Type}</h6>
                                    <p class="card-text">${obj.Body_Details}</p>
                                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    onclick="showDetail('${obj.id}')">
                                        More
                                    </button>
                                    <div class="form-check my-3">
                                        <input class="form-check-input" type="checkbox" name="compare" value="${obj.id}" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Compare
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <img src="${obj.IMG}" alt="" title="${obj.Brand} ${obj.Model}">
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
               
            `
            a++
        }
}



//select load:
getData('../server/brands.php',renderBrands)
getData('../server/models.php',renderModels)


function renderBrands(data){
    for(let obj of data){
        document.getElementById('brand').innerHTML+=`
        <option>${obj.Brand}</option>
        `
    }
}
function renderModels(data){
    for(let obj of data){
        document.getElementById('model').innerHTML+=`
        <option>${obj.Model}</option>
        `
        
    }
}
function filterModel(data){
    document.getElementById('model').innerHTML = '<option value=0>All</option>'
    for(let obj of data){
        document.getElementById('model').innerHTML+=`
        <option>${obj.model}</option>
        `
        
    }
}
function filterByBrand(domObj){
        const brand=domObj.value
        let a=domObj.value
        console.log(a)
        getData('../server/filteredByBrand.php?brand='+brand,renderCars)
        getData('../server/filteredByModel.php?brand='+brand,filterModel)
        
        if(a == 0){getData('../server/cars.php',renderCars)}
}
function filterByModels(domObj){
        const brand = document.getElementById('brand').value
        const model = document.getElementById('model').value
        getData('../server/filteredModels.php?brand='+brand+'&model='+model, renderCars)
}

function showDetail(x){
    getData("../server/details.php?id="+x, showModal)
}
function showModal(data){
   
    document.querySelector('.modal-title').innerHTML=data[0].Brand +" "+data[0].Model
    document.querySelector('.modal-body').innerHTML=`
    <div>
        <div id="carousel">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="${data[0].IMG}" class="d-block w-100 h-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="${data[0].IMG}" class="d-block w-100 h-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="${data[0].IMG}" class="d-block w-100 h-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        


        <div id="data">
            <p>Brand: ${data[0].Brand}</p>
            <p>Model: ${data[0].Model}</p>
            <p>Type: ${data[0].Type}</p>
            <p>Exterior color: ${data[0].Exterior_Color}</p>
            <p>Interior color: ${data[0].Interior_Color}</p>
            <p>Body details: ${data[0].Body_Details}</p>
            <p>Engine size: ${data[0].Engine_Size}</p>
            <p>Horsepower: ${data[0].Horsepower}bhp</p>
        </div>
    </div>
    `
}
function compare(){
    let domObj = document.querySelectorAll('[name="compare"]:checked')
    for(let obj of domObj){
        console.log(obj.value)
    }
}



</script>