# Craft CMS Content Filter Demo

This is something I put together for the NYC Craft CMS meetup 4/2015. It demonstrates how to implement content listing filters (facet filtering) in Twig templates. These include:

* Mutually exclusive category: Color
* Inclusive category: Options
* Range: Mileage
* Enumeration (basic field value): Transmission

The product list is a bunch of Jeep Wranglers.

## Setup

1. Create a local database and import the sql file
2. Edit `craft/config/db.php` to add your local credentials
3. Set up local host (with MAMP or other)
4. Log in at `http://filter-demo.local/admin` or whatever hostname you chose with `admin`/`adminpass`
