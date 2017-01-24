<?php
function r_recipe_options_mb($post) {
    $recipe_data = get_post_meta($post->ID, 'recipe_data', true);
    if (!$recipe_data) {
        $recipe_data = [
            'ingredients' => '',
            'time' => '',
            'utensils' => '',
            'level' => 'Beginner',
            'meal_type' => ''
        ];
    }
    ?>
    <div class="form-group">
        <label for="r_inputIngredients">Ingredients</label>
        <input type="text" class="form-control" name="r_inputIngredients" value="<?= $recipe_data['ingredients']; ?>">
    </div>
    <div class="form-group">
        <label for="r_inputTime">Cooking Time</label>
        <input type="text" class="form-control" name="r_inputTime" value="<?= $recipe_data['time']; ?>">
    </div>
    <div class="form-group">
        <label for="r_inputUtensils">Cooking Utensils</label>
        <input type="text" class="form-control" name="r_inputUtensils" value="<?= $recipe_data['utensils']; ?>">
    </div>
    <div class="form-group">
        <label for="r_inputLevel">Cooking Level</label>
        <select class="form-control" name="r_inputLevel">
            <option value="Beginner">Beginner</option>
            <option value="Intermediate"<?= $recipe_data['level'] == 'Intermediate' ? 'selected' : ''; ?>>Intermediate</option>
            <option value="Expert"<?= $recipe_data['level'] == 'Expert' ? 'selected' : ''; ?>>Expert</option>
        </select>
    </div>
    <div class="form-group">
        <label for="r_inputMealType">Meal Type</label>
        <input type="text" class="form-control" name="r_inputMealType" value="<?= $recipe_data['meal_type']; ?>">
    </div>
<?php } ?>