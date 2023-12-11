
<main>
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
            
       
   </main>

    
    <div class="cars d-flex flex-column gap-2" style="margin: auto;">
        
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
            document.getElementById('carrow').innerHTML+=`    
                    <div class="card m-3 p-1" style="width: 48%">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5 class="card-title">${obj.Brand} <span style="font-size: 1rem">${obj.Model}</span></h5>
                                    <h6 class="card-subtitle mb-2 text-muted">${obj.Type}</h6>
                                    <p class="card-text">${obj.Body_Details}</p>
                                    <a href="index.php?prog=more.html" class="card-link">More</a>
                                </div>
                                <div class="col-sm-6">
                                    <img src="${obj.IMG}" alt="" title="${obj.Brand} ${obj.Model}">
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
        console.log(brand, model)
        getData('../server/filteredModels.php?brand='+brand+'&model='+model, renderCars)
}

    
</script>