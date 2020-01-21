<template>
	<div class="modal fade" id="modalEditCv" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	    	<div class="modal-content">
		      	<div class="modal-body">
			        <form method="POST" @submit.prevent="sendData" novalidate>
			        	<input type="hidden" name="id" v-model="detail.id = $parent.detail.id">
			        	<input type="hidden" name="type" v-model="detail.type = $parent.detail.type">
						<div class="single-resume-feild ">
							<div class="single-input">
								<label>Grado obtenido</label>
								<input type="text" class="form-control" name="degree" autocomplete="false" v-model="detail.title = $parent.detail.title">
								<span class="invalid-feedback" role="alert">
									<strong>  </strong>
								</span>
							</div>
						</div>
						<div class="single-resume-feild feild-flex-2">
							<div class="single-input">
								<label>Desde</label>
								<input type="text" class="datepicker form-control" name="e_from"v-model="detail.from = $parent.detail.from">
								<span class="invalid-feedback" role="alert">
									<strong>message</strong>
								</span>
							</div>
							<div class="single-input">
								<label>Hasta</label>
								<input type="text" class="datepicker form-control" name="e_to" v-model="detail.to = $parent.detail.to">
								<span class="invalid-feedback" role="alert">
									<strong>$message</strong>
								</span>
							</div>
						</div>
						<div class="single-resume-feild ">
							<div class="single-input">
								<label> Institución:</label>
								<input type="text" class="form-control" name="institution" :organization="detail.organization" autocomplete="false" v-model="detail.organization = $parent.detail.organization">
								<span class="invalid-feedback" role="alert">
									<strong>$message</strong>
								</span>
							</div>
						</div>
						<div class="single-resume-feild ">
							<div class="single-input">
								<label>Información adicional: <span>(opcional)</span></label>
								<textarea name="e_additional_information" class="form-control" v-model="detail.additional = $parent.detail.additional"></textarea>
								<span class="invalid-feedback" role="alert">
									<strong>$message</strong>
								</span>
							</div>
						</div>
						<div v-if="message" class="alert alert-success alert-dismissible">
			                <button type="button" class="close" data-dismiss="alert">&times;</button>
			                 Datos actualizados correctamente
			            </div>

						<div class="submit-resume">
							<button type="submit">Guardar</button>
						</div>
					</form>
					
		      	</div>
	    	</div>
	  	</div>
	</div>
</template>

<script>
    export default {
        name: "modal-edit-cv",
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
        		},

        		message: false
        	}
        },
        mounted() {
        },
        methods :{
        	sendData(){
        		let url;
        		url = 'http://localhost/mineria/public/api';
        		if (this.detail.type == 1) {
        			url = `${url}/education/${this.detail.id}`
        		}else if(this.detail.type == 2){
        			url = `${url}/experience/${this.detail.id}`
        		}
        		axios.put(url,this.detail)
        		.then(response => {
        			this.message = true;
        		})
        	}
        }
    }
</script>