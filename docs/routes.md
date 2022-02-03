# Routes

Voici la liste des pages et leur URL (avec parfois des "ID" pouvant changer) :

```text
accueil : /
mentions légales : /mentions-legales/
catégorie #12 : /catalogue/categorie/12
type #40 : /catalogue/type/40
marque #2 : /catalogue/marque/2
produit #4 : /catalogue/produit/4
```

## Sprint 1

| URL | HTTP Method | Controller | Method | Title | Content | Comment |
|--|--|--|--|--|--|--|
| `/public-url/with-sub-folder/[and-dynamic-part]` | `GET` ou `POST` | `ControllerName` | `methodName` | Titre de la page | Description of page's content | Explain here the dynamics parts of your URL (`[]`) |
| `/` | `GET` | `MainController` | `affichePageHome` | Dans les shoe | 5 categories | - |
| `/mentions-legales/` | `GET` | `MainController` | `affichePageMentionLegales` | Legal Notices | Legal Notice | - |
| `/catalogue/categorie/[idCategory]` | `GET` | `CatalogController` | `affichePageCategory` | #Name of the category# |  Products attached to the category | [id] represents the id of the category |
| `/catalogue/type/[idType]` | `GET` | `CatalogController` | `type` | #Name of the type# |  Products attached to the type | [id] represents the id of the type |
| `/catalogue/marque/[idBrand]` | `GET` | `CatalogController` | `brand` | #Name of the brand# | products attached to the brand  | [id] represents the id of the brand] |
| `/catalogue/produit/[idProduct]` | `GET` | `CatalogController` | `product` | # Name of the Product #| Product details | (`[id]`) => represent the Product id |
