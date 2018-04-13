# php-show-env-vars
Prints all environment variables to a browser window. 

This is a simple php project that you can run to display all of the environment variables that are available. I use this to help me debug "supply" buildpacks to make sure that environment variables are set appropriately. 

To deploy to cloud foundry 

```bash
cf push 
```

If you want to deploy this using multiple buildpacks, use these commands:

```bash
cf push phpenvs -m 64m --no-start -b binary_buildpack
cf v3-push phpenvs -b "your supply buildpack" -b php_buildpack
```

