<template>

	<div class="col-md-12 col-lg-3">
		<div class="job-grid-sidebar">
		     
		    <div class="single-job-sidebar sidebar-category">
			  <h3>Departamento</h3>
			  {{departmentselected}}
			  <div class="job-sidebar-box">
			     <form>
			        <select class="sidebar-category-select-3 department_filter" v-model="departmentselected" @change="onChange($event)">
			            <option  value="">Departamento</option>
		                <option v-for="department in departments" :value="department.id">
		                    {{department.department}}
		                </option>
			        </select>
			     </form>
			  </div>
			  
			</div>
		      
		    <div class="single-job-sidebar sidebar-category">
			  <h3>Categoria</h3>
			  <div class="job-sidebar-box">
			     <form>
			        <select class="sidebar-category-select-2 category_filter" v-model="categoryselected">
			            <option value="">Categoria</option>
		                <option v-for="category in categories" :value="category.id">
		                    {{category.category}}
		                </option>
			        </select>
			     </form>
			  </div>
			</div>
		     
		    <div class="single-job-sidebar sidebar-location">
				<h3>Fecha de publicación</h3>
				<div class="date-post-job job-sidebar-box">
					<div v-for="date in dates" class="form-group form-radio">
						<input name="radio" :id="date.htmlid" type="radio" :value="date.id" class="date_filter" v-model="dateselected" @click="getdates(date.days)">
						<label :for="date.htmlid" class="inline control-label">{{date.name}}</label>
					</div>
				</div>
			</div>
		      
		    <div class="single-job-sidebar sidebar-type">
			  <h3>Tipo de trabajo</h3>
			  <div class="job-sidebar-box">
			     <ul>
		            <li v-for="(type, index) in types" class="checkbox">
		               <input class="checkbox-spin" :id="type.slug" type="checkbox" :value="type.id" v-model="typesselected" @click="gettypes(type.id)"/>
		               <label :for="type.slug"><span></span>{{type.job_type}}</label>
		            </li>
			     </ul>
			  </div>
			</div>
		</div>
	</div>

</template>
<script>
    export default {
    	name: "filter-component",
    	data(){
    		return {
    			departments: {},
    			types: {},
    			categories: {},
    			dates: [
    				{id: 1, name: 'Hoy', days: 1, htmlid: 'last_1'},
    				{id: 2, name: 'Ayer', days: 2, htmlid: 'last_2'},
    				{id: 3, name: '7 días', days: 7, htmlid: 'last_3'},
    				{id: 4, name: '15 días', days: 15, htmlid: 'last_4'},
    				{id: 5, name: '30 días', days: 30, htmlid: 'last_5'}
    			],
    			departmentselected: '',
    			typesselected: [],
    			categoryselected: '',
    			dateselected: ''
    		}
    	},
        created() {
            let url;
            url = 'http://localhost/mineria/public/api'
            axios.get(`${url}/department`)
        		.then(response => {
        			this.departments = response.data;
        			console.log("departments", this.departments);
        		})

        	axios.get(`${url}/type`)
        		.then(response => {
        			this.types = response.data;
        			console.log("types", this.types);
        		})

        	axios.get(`${url}/category`)
        		.then(response => {
        			this.categories = response.data;
        			console.log("categories", this.categories);
        		})
        },
        methods: {
        	gettypes(id){
        		let array = this.typesselected;
        		if (array.indexOf(id) > -1) {
        			array.splice( array.indexOf(id), 1 );
        		}else{
        			array.push(id);
        		}

        		let types;
        		if (array.length > 0) {
        			types = array.join("-");
        		}else{
        			types = 'all';
        		}
        		console.log(array.join("-"));
        		let url;
            	url = 'http://localhost/mineria/public/api/types'
        		axios.get(`${url}/${types}`)
        		.then(response => {
        			console.log(response.data.data);
        		})
        	},
        	getdates(date){
        		console.log(date)
        	},
        	getdepartment(department){
        		console.log(department)
        	},
        	onChange(event) {
	            console.log(event.target.value)
	        }
        }
    };
</script>
