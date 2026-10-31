
QUESTIONS

G1. Which column did you turn into a table, and why that one?

I turned the `brand` column of `products` into a `brands` table. Its values come from a fixed list (Choco, Mint, Dishwashing), the same brand repeats across many products, and a brand could one day need details of its own like a supplier or country. I did not choose `package` because it only describes the physical form of a product, while `price`, `stock` and `name` are plain values, not things.

G2. What number did screenshot 6 show, and why exactly that number?

Screenshot 6 showed 6 queries. My list page has 5 products, so there was 1 query to load the products and then 1 more query for each product to load its brand, which is 1 + 5 = 6. This is the N+1 problem, and `with('brand')` fixed it by loading all brands in one query, so the count dropped to 2.

G3. What would break if `belongsTo` were plural?

If I named the method `brands()` instead of `brand()`, Eloquent would take that name, add `_id`, and look for a column called `brands_id` in the `products` table. That column does not exist, so `$product->brands` would fail, and my list page and `with('brand')` would break because they depend on the relationship method named `brand`.