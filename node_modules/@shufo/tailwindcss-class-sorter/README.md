[![npm](https://img.shields.io/npm/v/@shufo/tailwindcss-class-sorter)](https://www.npmjs.com/package/@shufo/tailwindcss-class-sorter)
[![CI](https://github.com/shufo/tailwindcss-class-sorter/actions/workflows/test.yml/badge.svg)](https://github.com/shufo/tailwindcss-class-sorter/actions/workflows/test.yml)
[![codecov](https://codecov.io/gh/shufo/tailwindcss-class-sorter/branch/main/graph/badge.svg?token=CuqqimnEC4)](https://codecov.io/gh/shufo/tailwindcss-class-sorter)

# tailwindcss-class-sorter

A tailwindcss class sorter that respects tailwind config file.

## Installation

```bash
$ npm install @shufo/tailwindcss-class-sorter
# yarn
$ yarn add @shufo/tailwindcss-class-sorter
```

## Usage

```typescript
const { sortClasses } = require("@shufo/tailwindcss-class-sorter");

const sorted = sortClasses("pt-2 p-4");
console.log(sorted);
// => "p-4 pt-2"
```

`tailwindcss-class-sorter` will automatically look for `tailwind.config.js` in the project directory.
Then if it exists, it will sort according to the tailwindcss configuration. If it does not exist, the default sort order of tailwindcss plugin will be used.

## API

### functions

#### sortClasses(classes: string, options: IOption)

`classes`: classes string e.g. `z-5 z-50`

### Interfaces

#### IOption

```typescript
export interface IOption {
  tailwindConfigPath?: string;
  tailwindConfig?: TailwindConfig;
}
```

| key                | value                                     |
| ------------------ | ----------------------------------------- |
| tailwindConfigPath | A path to tailwind config file            |
| tailwindConfig     | A configuration object of tailwind config |

## Testing

```bash
$ yarn install
$ yarn run test
```

## Benchmarking

```bash
$ yarn run benchmark
```

![image](https://user-images.githubusercontent.com/1641039/155764304-fd676354-1b29-4390-b035-96dc9aae051d.png)

## Contributing

1.  Fork it
2.  Create your feature branch (`git checkout -b my-new-feature`)
3.  Commit your changes (`git commit -am 'Add some feature'`)
4.  Push to the branch (`git push origin my-new-feature`)
5.  Create new Pull Request

## LICENSE

MIT
