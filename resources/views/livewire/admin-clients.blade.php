
    
    <div class="pd-20 card-box mb-15">
        
                                
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Name">	
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="email">Username</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Username">	
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Email">	
                    </div>
                </div>									
            </div>
                                    
            
            <div class="pb-5 pt-3">
                
                <a href="{{ route('admin.client') }}" class="btn btn-primary">Submit</a>
               
                <a href="{{ route('admin.client') }}" class="btn btn-outline-dark ml-3">Cancel</a>
            </div>
        
    
    </div>

</div>
