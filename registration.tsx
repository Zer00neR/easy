import { colors } from "@/src/colors";
import { useGlobalContext } from "@/src/context";
import { Formik } from "formik";
import styled from "styled-components";

export const Registration = () => {
  const { registration } = useGlobalContext();
  return (
    <Container>
      <Formik
        initialValues={{ name: "", surname: "", phone: "", password: "" }}
        onSubmit={(values, { setSubmitting }) => {
          setTimeout(() => {
            registration(values);
            setSubmitting(false);
          }, 400);
        }}
      >
        {({ values, handleChange, handleBlur, handleSubmit, isSubmitting }) => (
          <Form onSubmit={handleSubmit}>
            <Input
              placeholder="Имя"
              type="name"
              name="name"
              onChange={handleChange}
              onBlur={handleBlur}
              value={values.name}
            />
            <Input
              placeholder="Фамилия"
              type="surname"
              name="surname"
              onChange={handleChange}
              onBlur={handleBlur}
              value={values.surname}
            />
            <Input
              placeholder="Телефон"
              type="phone"
              name="phone"
              onChange={handleChange}
              onBlur={handleBlur}
              value={values.phone}
            />
            <Input
              placeholder="Пароль"
              type="password"
              name="password"
              onChange={handleChange}
              onBlur={handleBlur}
              value={values.password}
            />
            <Button type="submit" disabled={isSubmitting}>
              <Text>Создать</Text>
            </Button>
          </Form>
        )}
      </Formik>
    </Container>
  );
};

const Container = styled.div`
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
`;
const Form = styled.form`
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
`;
const Button = styled.button`
  border: none;
  margin: 20px;
  padding: 7px;
  width: 200px;
  border-radius: 64px;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: ${colors.grey};
  :hover {
    background-color: ${colors.yellow};
  }
  cursor: pointer;
`;
const Text = styled.p`
  color: ${colors.white};
  font-size: 24px;
  font-weight: 400;
  font-family: Verdana;
`;

const Input = styled.input`
  width: 400px;
  height: 60px;
  padding: 15px;
  margin: 10px;
  font-size: 28px;
  border-radius: 15px;
`;
