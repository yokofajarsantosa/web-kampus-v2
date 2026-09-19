CMS NAVBAR EXTENSION

1. Import database/cms_pages_update.sql after database/schema.sql and database/cms_update.sql.
2. Existing 146 navbar items each have their own module under application/modules/nav_XXX/ with controllers, models, and views.
3. Each navbar opens at /nav_XXX. The homepage dynamically maps data-nav-key to the corresponding module route.
4. Portal Admin now has Add Data forms and page-content management.
5. New navbar entries created in Admin are stored in site_navigation/site_pages and can use the supplied URL/source link; existing 146 navbar entries retain their dedicated folders.
