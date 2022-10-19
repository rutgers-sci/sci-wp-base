## Branches

The `default` branch of this repository is where PRs are merged, and has [CI](https://github.com/pantheon-systems/WordPress/tree/default/.circleci) that copies `default` to `master` after removing the CI directories. This allows customers to clone from `master` and implement their own CI without needing to worry about potential merge conflicts.

## Custom Upstreams

If you are using this repository as a starting point for a custom upstream, be sure to review the [documentation](https://pantheon.io/docs/create-custom-upstream#pull-in-core-from-pantheons-upstream) and pull the core files from the `master` branch.
