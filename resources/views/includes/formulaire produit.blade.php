@csrf
<div class="form-group">
   <input type="text" class="form-control @error('Nom du Produit') is-invalid @enderror" name="Nom du Produit" 
   placeholder="Nom du Produit" value="{{old('Nom du Produit')}}">
    @error('Nom du Produit')
    <div class="invalid-feedback">
      {{$errors->first('Nom du Produit')}}
    </div>
    @enderror
</div>
<div class="form-group">
  <input type="text" class="form-control @error('Prix Unitaire') is-invalid @enderror" name="Prix Unitaire" 
  placeholder="Prix Unitaire" value="{{old('Prix Unitaire')}}">
  @error('Prix Unitaire')
  <div class="invalid-feedback">
    {{$errors->first('Prix Unitaire')}}
  </div>
  @enderror
</div>
<div class="form-group">
  <input type="text" class="form-control @error('Categorie') is-invalid @enderror" name="Categorie" 
  placeholder="Categorie" >
  @error('Categorie')
  <div class="invalid-feedback">
    {{$errors->first('Categorie')}}
  </div>
  @enderror
</div>
<div class="form-group">
  <input type="text" class="form-control @error('stock') is-invalid @enderror" name="stock" 
  placeholder="stock" >
  @error('stock')
  <div class="invalid-feedback">
    {{$errors->first('stock')}}
  </div>
  @enderror
  
</div>
</div>
</div>