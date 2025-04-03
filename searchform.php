<form action="/" method="get" class="search-form">
    <label for="search-form">
        <input type="text" 
          id="search-form" 
          class="form-control"
          name="s" 
          placeholder="<?php esc_attr_e('Search...', 'portfolio'); ?>" 
          value="<?php the_search_query() ?>" 
          required />
    </label>
    <button class="btn btn-primary" type="submit"><?php esc_html_e('Search', 'portfolio'); ?></button>
</form>