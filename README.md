# Personal website
This static site is hosted on an AWS S3 bucket, which is cached and served globally through AWS Cloudfront Edge Locations. 

The site is programatically updated with GitHub Actions every time the master branch is merged. The action is set up with a declarative `.yaml` file that uploads the source code and assets to the S3 bucket. The workflow then invalidates the Cloudfront distribution's cache so that the latest site content is pulled from the origin bucket. For authentication, the action uses access and secret keys from an authorized AWS IAM user. 