<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script><script type="text/javascript">


function slidereponse(reponsechoisie) {
$('.reponse').each(function(index) {
if ($(this).attr("id") == reponsechoisie) {
if ($(this).is(":hidden")) { // si la suite était bien cachée on l affiche
$(this).slideDown(300);
$(this).parent().addClass('active');
}
else { // si la suite était déjà ouverte, on la cache
$(this).slideUp(300);
$(this).parent().removeClass('active');
}
}
else { // on ferme toutes les suites qui ne correspondent pas à celle choisie.
$(this).slideUp(200);
$(this).parent().removeClass('active');
}
});
}
</script>



<center><h3>Médecin sans Frontière</h3></center>
</br>
</br>
</br>
<center><div class="blockarticle"><a class="question" href="javascript:slidereponse('r1');">titre article</br></br></a>
<div id="r1" class="reponse"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum urna eu erat feugiat accumsan. Morbi nibh tortor, tincidunt in gravida vel, ornare nec risus. Curabitur semper mi viverra feugiat maximus. Etiam mollis, sapien vel molestie hendrerit, justo risus pharetra libero, eget lacinia augue nulla eget metus. Nullam feugiat orci egestas, cursus dolor quis, mattis odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. In rhoncus tellus vitae magna tincidunt cursus.

Ut mollis, urna vel feugiat faucibus, magna nunc blandit sem, in commodo risus libero eu mi. Ut sit amet sollicitudin lacus, ut fermentum enim. Sed tempor aliquam ante ut euismod. Mauris sed mauris blandit, consectetur lectus sed, aliquam tortor. Proin ultricies lacinia arcu et posuere. Proin in tempus odio. Nulla scelerisque, lacus id vestibulum aliquet, ligula dui porttitor ex, id scelerisque lectus mauris varius risus. Maecenas varius sapien eu nunc dignissim, eu tempor leo rhoncus. Nullam consequat sit amet tellus convallis porttitor. </div>
</div>
</br>
<div class="blockarticle"><a class="question" href="javascript:slidereponse('r2');">titre article</br></br></a>
<div id="r2" class="reponse"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum urna eu erat feugiat accumsan. Morbi nibh tortor, tincidunt in gravida vel, ornare nec risus. Curabitur semper mi viverra feugiat maximus. Etiam mollis, sapien vel molestie hendrerit, justo risus pharetra libero, eget lacinia augue nulla eget metus. Nullam feugiat orci egestas, cursus dolor quis, mattis odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. In rhoncus tellus vitae magna tincidunt cursus.

Ut mollis, urna vel feugiat faucibus, magna nunc blandit sem, in commodo risus libero eu mi. Ut sit amet sollicitudin lacus, ut fermentum enim. Sed tempor aliquam ante ut euismod. Mauris sed mauris blandit, consectetur lectus sed, aliquam tortor. Proin ultricies lacinia arcu et posuere. Proin in tempus odio. Nulla scelerisque, lacus id vestibulum aliquet, ligula dui porttitor ex, id scelerisque lectus mauris varius risus. Maecenas varius sapien eu nunc dignissim, eu tempor leo rhoncus. Nullam consequat sit amet tellus convallis porttitor. </div>
</div>
</br>
<div class="blockarticle"><a class="question" href="javascript:slidereponse('r3');">titre article</br></br></a>
<div id="r3" class="reponse"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum urna eu erat feugiat accumsan. Morbi nibh tortor, tincidunt in gravida vel, ornare nec risus. Curabitur semper mi viverra feugiat maximus. Etiam mollis, sapien vel molestie hendrerit, justo risus pharetra libero, eget lacinia augue nulla eget metus. Nullam feugiat orci egestas, cursus dolor quis, mattis odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. In rhoncus tellus vitae magna tincidunt cursus.

Ut mollis, urna vel feugiat faucibus, magna nunc blandit sem, in commodo risus libero eu mi. Ut sit amet sollicitudin lacus, ut fermentum enim. Sed tempor aliquam ante ut euismod. Mauris sed mauris blandit, consectetur lectus sed, aliquam tortor. Proin ultricies lacinia arcu et posuere. Proin in tempus odio. Nulla scelerisque, lacus id vestibulum aliquet, ligula dui porttitor ex, id scelerisque lectus mauris varius risus. Maecenas varius sapien eu nunc dignissim, eu tempor leo rhoncus. Nullam consequat sit amet tellus convallis porttitor. </div>
</div>
</br>
<div class="blockarticle"><a class="question" href="javascript:slidereponse('r4');">titre article</br></br></a>
<div id="r4" class="reponse"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum urna eu erat feugiat accumsan. Morbi nibh tortor, tincidunt in gravida vel, ornare nec risus. Curabitur semper mi viverra feugiat maximus. Etiam mollis, sapien vel molestie hendrerit, justo risus pharetra libero, eget lacinia augue nulla eget metus. Nullam feugiat orci egestas, cursus dolor quis, mattis odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. In rhoncus tellus vitae magna tincidunt cursus.

Ut mollis, urna vel feugiat faucibus, magna nunc blandit sem, in commodo risus libero eu mi. Ut sit amet sollicitudin lacus, ut fermentum enim. Sed tempor aliquam ante ut euismod. Mauris sed mauris blandit, consectetur lectus sed, aliquam tortor. Proin ultricies lacinia arcu et posuere. Proin in tempus odio. Nulla scelerisque, lacus id vestibulum aliquet, ligula dui porttitor ex, id scelerisque lectus mauris varius risus. Maecenas varius sapien eu nunc dignissim, eu tempor leo rhoncus. Nullam consequat sit amet tellus convallis porttitor. </div>
</div>
</br>
<div class="blockarticle"><a class="question" href="javascript:slidereponse('r5');">titre article</br></br></a>
<div id="r5" class="reponse"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum urna eu erat feugiat accumsan. Morbi nibh tortor, tincidunt in gravida vel, ornare nec risus. Curabitur semper mi viverra feugiat maximus. Etiam mollis, sapien vel molestie hendrerit, justo risus pharetra libero, eget lacinia augue nulla eget metus. Nullam feugiat orci egestas, cursus dolor quis, mattis odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. In rhoncus tellus vitae magna tincidunt cursus.

Ut mollis, urna vel feugiat faucibus, magna nunc blandit sem, in commodo risus libero eu mi. Ut sit amet sollicitudin lacus, ut fermentum enim. Sed tempor aliquam ante ut euismod. Mauris sed mauris blandit, consectetur lectus sed, aliquam tortor. Proin ultricies lacinia arcu et posuere. Proin in tempus odio. Nulla scelerisque, lacus id vestibulum aliquet, ligula dui porttitor ex, id scelerisque lectus mauris varius risus. Maecenas varius sapien eu nunc dignissim, eu tempor leo rhoncus. Nullam consequat sit amet tellus convallis porttitor. </div>
</div></center>
