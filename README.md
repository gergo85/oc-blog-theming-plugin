# Blog Theming
Provides theming options to the Rainlab Blog plugin.

### Dependencies
- [Rainlab.Blog](https://github.com/rainlab/blog-plugin)

### Usage
_Make sure the migrations that comes with this plugin have been installed. This should happen automatically upon installing this plugin, but might this not be the case then logging out and back in should do the trick._

Blog Theming adds fields to models found in the `Rainlab.Blog` plugin. You can access the fields like you would in any other model/component. 

Below you'll find an overview of the fields.

| Fieldname        | Model           | Type  | Description | Added in |
| ------------- |-------------| -----|----|----|
| `theme_color`   | `Category` | `colorpicker` | Gives a color to a category.| `1.0.0` |
| `theme_css`   | `Category` | `codeeditor` | Adds custom styling to a category.| `1.0.0` |

---

#### Issues or other problems
Yikes. Found a problem with this plugin? Submit an issue and I'll look at it ASAP. If you fix it yourself and submit a PR I'll send you a cookie.

#### Want a feature?
Submit a pull request or submit an issue. I will get back to you as soon as possible to discuss if we can work something out.

#### Copyright
Developed for Rebel59 by @CptMeatball. 
Plugin may be altered in anyway, provided you link back to this repo.
