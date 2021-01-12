<template>
	<div>
		<div class="single-resume-feild ">
			<div class="single-input">
				<label for="degree">{{ title }}</label>
				<button data-target="#modalEditCv" data-toggle="modal" 
					class="btn btn-light" title="Editar" 
					@click="hello(id, type)" 
					:data-id="id" :data-type="type">
					<i class="fa fa-edit"></i>
				</button>
				<button
			       class="btn btn-light" title="Eliminar" 
			       @click="deleteElement(id, type)"
			       :data-id="id" :data-type="type"
			    >
			        <i class="fa fa-close"></i>
			    </button>
			</div>
		</div>
		<div class="single-resume-feild feild-flex-2">
			<div class="single-input">
				<label for="e_from">Desde</label>
				<br>
				<p>{{ from }}</p>
			</div>
			<div class="single-input">
				<label for="e_to">Hasta</label>
				<br>
				<p>{{ to }}</p>
			</div>
		</div>
		<div class="single-resume-feild ">
			<div class="single-input">
				<label for="institution">Institución</label>
				<br>
				<p>{{ organization }}</p>
			</div>
		</div>
		<div class="single-resume-feild ">
			<div class="single-input">
				<label for="e_additional_information">Información adicional</label>
				<br>
				<p>{{ additional }}</p>
			</div>
		</div>
		<hr>
	</div>
	
</template>

<script>
    export default {
        name: "cv-detail",
        data(){
        	return {
        		detail: {
        			id: '',
        			type: '',
        			title: '',
        			from: '',
        			to: '',
        			organization: '',
        			additional: ''
        		}
        	}
        },
        props: ['title', 'from', 'to', 'organization', 'additional', 'id', 'type'],
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
        	async hello(id, type){
        		let url = 'http://localhost/mineria/public/api';
        		if (type == 1) {
        			url = `${url}/education`;
        		}else if (type == 2){
        			url = `${url}/experience`;
        		}
        		const data = await fetch(`${url}/${id}`);
        		console.log("data", data);
        		const json = await data.json();

        		if (type == 1) {
        			this.detail.id = json.id;
	        		this.detail.type = 1;
	        		this.detail.title = json.degree;
	        		this.detail.from = json.e_from;
	        		this.detail.to = json.e_to;
	        		this.detail.organization = json.institution;
	        		this.detail.additional = json.e_additional_information;
        		}else if (type == 2){
        			this.detail.id = json.id;
	        		this.detail.type = 2;
	        		this.detail.title = json.title;
	        		this.detail.from = json.w_from;
	        		this.detail.to = json.w_to;
	        		this.detail.organization = json.company;
	        		this.detail.additional = json.w_additional_information;
        		}
        		
        		this.$emit('datatomodal', this.detail)
        	},
        	deleteElement: function(id, type){
        		console.log('Estas bien prro')
        		let url;
        		url = 'http://localhost/mineria/public/api';
        		if (type == 1) {
        			url = `${url}/education/${id}`
        		}else if(type == 2){
        			url = `${url}/experience/${id}`
        		}
        		axios.delete(url)
        		.then(response => {
        			console.log(response)
        		})
        	}
        }
    };
</script>